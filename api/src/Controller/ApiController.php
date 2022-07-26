<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contas;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/contas", name="conta_index", methods={"GET"})
     */
    public function index(): Response 
    {
        $contas = $this->getDoctrine()->getRepository(Contas::class)->findAll();

        return $this->json(['data' => $contas ]);
    }

    /**
     * @Route("/api/contas/{credencial}/{chave}", name="conta_contas", methods={"GET"})
     */
    public function contas($credencial, $chave): Response 
    {
        $chave = hash('sha256', $chave);

        $contas = $this->getDoctrine()->getRepository(Contas::class)
                       ->findBy(['CREDENCIAL' => $credencial, 'CHAVE' => $chave], ['id' => 'DESC']);

        return $this->json(['data' => $contas ]);
    }

    /**
     * @Route("/api/contas", name="conta_create", methods={"POST"})
     */
    public function create(Request $request): Response 
    {
        $data = $request->request->all();
        $credencial = hash('sha256', $data['banco_repasse'] . '@@' . $data['agencia_repasse'] . '@@' . $data['conta_repasse'] . 
                      '@@' . $data['cnpj_empresa']. '@@' . $data['razao_social'] . '@@' . rand(000000, 999999));
        $chave = hash('sha256', uniqid(rand()));

        $contas = new Contas();
        $contas->setAGENCIAREPASSE($data['agencia_repasse']);
        $contas->setCONTAREPASSE($data['conta_repasse']);
        $contas->setBANCOREPASSE($data['banco_repasse']);
        $contas->setENDERECOEMRPESA($data['endereco_empresa']);
        $contas->setBAIRROEMPRESA($data['bairro_empresa']);
        $contas->setNUMEROEMPRESA($data['numero_empresa']);
        $contas->setCIDADEEMPRESA($data['cidade_empresa']);
        $contas->setCEPEMPRESA($data['cep_empresa']);
        $contas->setRAZAOSOCIAL($data['razao_social']);
        $contas->setNOMEFANTASIA($data['nome_fantasia']);
        $contas->setCNPJ($data['cnpj_empresa']);
        $contas->setEMAILEMPRESA($data['email_empresa']);
        $contas->setTELEFONEEMPRESA($data['telefone_empresa']);
        $contas->setCREDENCIAL($credencial);
        $contas->setCHAVE(hash('sha256', $chave));

        $doctrine = $this->getDoctrine()->getManager();
        $doctrine->persist($contas);
        $doctrine->flush();


        return $this->json(['msg' => 'Conta criada com sucesso.', 
                            'Credencial' => $credencial,
                            'Chave' => $chave]);
    }

    /**
     * @Route("/api/contas/{credencial}/{chave}", name="conta_delete", methods={"DELETE"})
     */
    public function delete($credencial, $chave): Response
    {
        $chave = hash('sha256', $chave);
        $doctrine = $this->getDoctrine();

        $contas = $doctrine->getRepository(Contas::class)
                       ->findOneBy(['CREDENCIAL' => $credencial]);
        
        $contas->setSTATUS(-1);
        
        $doctrine = $doctrine->getManager();
        $doctrine->flush();

        return $this->json(['msg' => 'Conta invalidada com sucesso.']);
    }
}
