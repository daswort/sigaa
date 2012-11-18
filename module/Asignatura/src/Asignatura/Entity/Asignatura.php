<?php 

namespace Asignatura\src\Asignatura\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
* @ORM\Entity
* @ORM\Table(name="asignaturas")
*/
class Asignatura {
	
	/**
	* @var integer $id
	*
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	private $id;

	/**
	* @var integer $id_seccion
	*
    * @ORM\ManyToOne(targetEntity="Seccion\src\Seccion\Entity\Seccion", 
    * 	cascade={"all"},
    * 	inversedBy="id"
    * )
    * @ORM\JoinColumn(name="id_seccion", referencedColumnName="id")
    **/
	private $id_seccion;

	/**
	* @var string $nombre
	*
	* @ORM\Column(type="string", length=64)
	*/
	private $nombre;

	/**
	* @var string $descripcion
	*
	* @ORM\Column(type="text", nullable=true)
	*/
	private $descripcion;

	/**
	* @var float $horas_teoria
	*
	* @ORM\Column(type="decimal", precision=9, scale=1)
	*/
	private $horas_teoria;

	/**
	* @var float $horas_practica
	*
	* @ORM\Column(type="decimal", precision=9, scale=1)
	*/
	private $horas_practica;

	/**
	* @var string $estado
	*
	* @ORM\Column(type="string", length=64)
	*/
	private $estado;

}