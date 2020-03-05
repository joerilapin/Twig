<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

interface Transform
{
public function transform(string $input);

}