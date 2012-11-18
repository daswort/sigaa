<?php 

namespace Seccion\src\Seccion\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Table(name="secciones")
* @ORM\Entity
*/
class Seccion {
	
	/**
	* @var integer $id
	* 
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	private $id;

	/**
	* @var string $numero
	*
	* @ORM\Column(type="integer")
	*/
	private $numero;

	/**
	* @var string $anio
	*
	* @ORM\Column(type="integer")
	*/
	private $anio;

	/**
	* @var string $semestre
	*
	* @ORM\Column(type="integer")
	*/
	private $semestre;

}