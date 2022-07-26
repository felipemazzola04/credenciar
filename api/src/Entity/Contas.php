<?php

namespace App\Entity;

use App\Repository\ContasRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContasRepository::class)
 */
class Contas
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $RAZAO_SOCIAL;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $CNPJ;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $NOME_FANTASIA;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $CONTA_REPASSE;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $AGENCIA_REPASSE;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $BANCO_REPASSE;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $EMAIL_EMPRESA;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $TELEFONE_EMPRESA;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ENDERECO_EMRPESA;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $BAIRRO_EMPRESA;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $CIDADE_EMPRESA;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $CEP_EMPRESA;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $ESTADO_EMPRESA;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $NUMERO_EMPRESA;

    /**
     * @ORM\Column(type="string", length=65, nullable=true)
     */
    private $CREDENCIAL;

    /**
     * @ORM\Column(type="string", length=65, nullable=true)
     */
    private $CHAVE;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $STATUS;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRAZAOSOCIAL(): ?string
    {
        return $this->RAZAO_SOCIAL;
    }

    public function setRAZAOSOCIAL(string $RAZAO_SOCIAL): self
    {
        $this->RAZAO_SOCIAL = $RAZAO_SOCIAL;

        return $this;
    }

    public function getCNPJ(): ?string
    {
        return $this->CNPJ;
    }

    public function setCNPJ(string $CNPJ): self
    {
        $this->CNPJ = $CNPJ;

        return $this;
    }

    public function getNOMEFANTASIA(): ?string
    {
        return $this->NOME_FANTASIA;
    }

    public function setNOMEFANTASIA(?string $NOME_FANTASIA): self
    {
        $this->NOME_FANTASIA = $NOME_FANTASIA;

        return $this;
    }

    public function getCONTAREPASSE(): ?string
    {
        return $this->CONTA_REPASSE;
    }

    public function setCONTAREPASSE(string $CONTA_REPASSE): self
    {
        $this->CONTA_REPASSE = $CONTA_REPASSE;

        return $this;
    }

    public function getAGENCIAREPASSE(): ?string
    {
        return $this->AGENCIA_REPASSE;
    }

    public function setAGENCIAREPASSE(string $AGENCIA_REPASSE): self
    {
        $this->AGENCIA_REPASSE = $AGENCIA_REPASSE;

        return $this;
    }

    public function getBANCOREPASSE(): ?string
    {
        return $this->BANCO_REPASSE;
    }

    public function setBANCOREPASSE(string $BANCO_REPASSE): self
    {
        $this->BANCO_REPASSE = $BANCO_REPASSE;

        return $this;
    }

    public function getEMAILEMPRESA(): ?string
    {
        return $this->EMAIL_EMPRESA;
    }

    public function setEMAILEMPRESA(?string $EMAIL_EMPRESA): self
    {
        $this->EMAIL_EMPRESA = $EMAIL_EMPRESA;

        return $this;
    }

    public function getTELEFONEEMPRESA(): ?string
    {
        return $this->TELEFONE_EMPRESA;
    }

    public function setTELEFONEEMPRESA(?string $TELEFONE_EMPRESA): self
    {
        $this->TELEFONE_EMPRESA = $TELEFONE_EMPRESA;

        return $this;
    }

    public function getENDERECOEMRPESA(): ?string
    {
        return $this->ENDERECO_EMRPESA;
    }

    public function setENDERECOEMRPESA(?string $ENDERECO_EMRPESA): self
    {
        $this->ENDERECO_EMRPESA = $ENDERECO_EMRPESA;

        return $this;
    }

    public function getBAIRROEMPRESA(): ?string
    {
        return $this->BAIRRO_EMPRESA;
    }

    public function setBAIRROEMPRESA(?string $BAIRRO_EMPRESA): self
    {
        $this->BAIRRO_EMPRESA = $BAIRRO_EMPRESA;

        return $this;
    }

    public function getCIDADEEMPRESA(): ?string
    {
        return $this->CIDADE_EMPRESA;
    }

    public function setCIDADEEMPRESA(?string $CIDADE_EMPRESA): self
    {
        $this->CIDADE_EMPRESA = $CIDADE_EMPRESA;

        return $this;
    }

    public function getCEPEMPRESA(): ?string
    {
        return $this->CEP_EMPRESA;
    }

    public function setCEPEMPRESA(?string $CEP_EMPRESA): self
    {
        $this->CEP_EMPRESA = $CEP_EMPRESA;

        return $this;
    }

    public function getESTADOEMPRESA(): ?string
    {
        return $this->ESTADO_EMPRESA;
    }

    public function setESTADOEMPRESA(?string $ESTADO_EMPRESA): self
    {
        $this->ESTADO_EMPRESA = $ESTADO_EMPRESA;

        return $this;
    }

    public function getNUMEROEMPRESA(): ?string
    {
        return $this->NUMERO_EMPRESA;
    }

    public function setNUMEROEMPRESA(?string $NUMERO_EMPRESA): self
    {
        $this->NUMERO_EMPRESA = $NUMERO_EMPRESA;

        return $this;
    }

    public function getCREDENCIAL(): ?string
    {
        return $this->CREDENCIAL;
    }

    public function setCREDENCIAL(?string $CREDENCIAL): self
    {
        $this->CREDENCIAL = $CREDENCIAL;

        return $this;
    }

    public function getCHAVE(): ?string
    {
        return $this->CHAVE;
    }

    public function setCHAVE(string $CHAVE): self
    {
        $this->CHAVE = $CHAVE;

        return $this;
    }

    public function getSTATUS(): ?int
    {
        return $this->STATUS;
    }

    public function setSTATUS(?int $STATUS): self
    {
        $this->STATUS = $STATUS;

        return $this;
    }
}
