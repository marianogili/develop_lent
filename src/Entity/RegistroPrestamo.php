<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RegistroPrestamoRepository")
 */
class RegistroPrestamo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prestador;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prestatario;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $objeto;

    /**
     * @ORM\Column(type="date")
     */
    private $prestamoDesde;

    /**
     * @ORM\Column(type="date")
     */
    private $prestamoHasta;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaRegistro;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrestador(): ?string
    {
        return $this->prestador;
    }

    public function setPrestador(string $prestador): self
    {
        $this->prestador = $prestador;

        return $this;
    }

    public function getPrestatario(): ?string
    {
        return $this->prestatario;
    }

    public function setPrestatario(string $prestatario): self
    {
        $this->prestatario = $prestatario;

        return $this;
    }

    public function getObjeto(): ?string
    {
        return $this->objeto;
    }

    public function setObjeto(string $objeto): self
    {
        $this->objeto = $objeto;

        return $this;
    }

    public function getPrestamoDesde(): ?\DateTimeInterface
    {
        return $this->prestamoDesde;
    }

    public function setPrestamoDesde(\DateTimeInterface $prestamoDesde): self
    {
        $this->prestamoDesde = $prestamoDesde;

        return $this;
    }

    public function getPrestamoHasta(): ?\DateTimeInterface
    {
        return $this->prestamoHasta;
    }

    public function setPrestamoHasta(\DateTimeInterface $prestamoHasta): self
    {
        $this->prestamoHasta = $prestamoHasta;

        return $this;
    }

    public function getFechaRegistro(): ?\DateTimeInterface
    {
        return $this->fechaRegistro;
    }

    public function setFechaRegistro(\DateTimeInterface $fechaRegistro): self
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }
}
