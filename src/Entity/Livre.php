<?php

namespace App\Entity;

class Livre
{
    public function __construct(
        private int $id,
        private string $titre,
        private string $auteur,
        private string $isbn,
        private string $genre,
        private int $anneePublication,
        private int $nombrePages,
        private bool $disponible,
        private int $nombreExemplaires,
        private string $resume,
        private string $editeur,
        private string $cote,
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getAuteur(): string
    {
        return $this->auteur;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function getGenre(): string
    {
        return $this->genre;
    }

    public function getAnneePublication(): int
    {
        return $this->anneePublication;
    }

    public function getNombrePages(): int
    {
        return $this->nombrePages;
    }

    public function isDisponible(): bool
    {
        return $this->disponible;
    }

    public function getNombreExemplaires(): int
    {
        return $this->nombreExemplaires;
    }

    public function getResume(): string
    {
        return $this->resume;
    }

    public function getEditeur(): string
    {
        return $this->editeur;
    }

    public function getCote(): string
    {
        return $this->cote;
    }
}
