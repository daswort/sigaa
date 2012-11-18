<?php 

namespace TipoUsuario\src\TipoUsuario\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
* @ORM\Entity
* @ORM\Table(name="tipos_usuarios")
*/
class TipoUsuario {
	
	/**
	* @var integer $id
	* 
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	private $id;

	/**
	* @var string $nombre
	*
	* @ORM\Column(type="string", length=10)
	*/
	private $nombre;

	/**
	* @var string $descripcion
	*
	* @ORM\Column(type="text", nullable=true)
	*/
	private $descripcion;
}