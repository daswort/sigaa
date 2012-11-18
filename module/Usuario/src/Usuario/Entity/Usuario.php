<?php 

namespace Usuario\src\Usuario\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Table(name="usuarios")
* @ORM\Entity
*/
class Usuario {
	
	/**
	* @var integer $id
	* 
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	private $id;

	/**
	* @var integer $id_tipo_usuario
	*
    * @ORM\ManyToOne(targetEntity="TipoUsuario\src\TipoUsuario\Entity\TipoUsuario", 
    * 	cascade={"all"},
    * 	inversedBy="id"
    * )
    * @ORM\JoinColumn(name="id_tipo_usuario", referencedColumnName="id")
    **/
	private $id_tipo_usuario;

	/**
	* @var string $matricula
	*
	* @ORM\Column(type="string", length=128, unique=true)
	*/
	private $matricula;

	/**
	* @var string $nombre_usuario
	*
	* @ORM\Column(type="string", length=10, unique=true)
	*/
	private $nombre_usuario;

	/**
	* @var string $contrasena
	*
	* @ORM\Column(type="string", length=64)
	*/
	private $contrasena;

	/**
	* @var string $nombres
	*
	* @ORM\Column(type="string", length=255)
	*/
	private $nombres;

	/**
	* @var string $apellido_pat
	*
	* @ORM\Column(type="string", length=128)
	*/
	private $apellido_pat;

	/**
	* @var string $apellido_mat
	*
	* @ORM\Column(type="string", length=128)
	*/
	private $apellido_mat;

	/**
	* @var string $rut
	*
	* @ORM\Column(type="string", length=64, unique=true)
	*/
	private $rut;

	/**
	* @var string $email
	*
	* @ORM\Column(type="string", length=64, unique=true)
	*/
	private $email;

	/**
	* @var integer $oficina
	*
	* @ORM\Column(type="integer")
	*/
	private $oficina;

	/**
	* @var integer $anexo
	*
	* @ORM\Column(type="integer")
	*/
	private $anexo;

	/**
	* @var integer $telefono
	*
	* @ORM\Column(type="integer")
	*/
	private $telefono;

	/**
	* @var string $estado
	*
	* @ORM\Column(type="string", length=64)
	*/
	private $estado;

}

/**
* @ORM\Table(name="administradores")
* @ORM\Entity
*/
class Administrador extends Usuario {

	/**
	* @var integer $id_usuario
	*
    * @ORM\ManyToOne(targetEntity="Usuario\src\Usuario\Entity\Usuario", 
    * 	cascade={"all"},
    * 	inversedBy="id"
    * )
    * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
    **/
	private $id_usuario;
}

/**
* @ORM\Table(name="docentes")
* @ORM\Entity
*/
class Docente extends Usuario {

	/**
	* @var integer $id_usuario
	*
    * @ORM\ManyToOne(targetEntity="Usuario\src\Usuario\Entity\Usuario", 
    * 	cascade={"all"},
    * 	inversedBy="id"
    * )
    * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
    **/
	private $id_usuario;

	/**
	* @var date $fechca_nac
	* 
	* @ORM\Column(name="fecha_nac", type="date")
	*/
	private $fechca_nac;
}

/**
* @ORM\Table(name="secretarios")
* @ORM\Entity
*/
class Secretario extends Usuario {

	/**
	* @var integer $id_usuario
	*
    * @ORM\ManyToOne(targetEntity="Usuario\src\Usuario\Entity\Usuario", 
    * 	cascade={"all"},
    * 	inversedBy="id"
    * )
    * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
    **/
	private $id_usuario;

	/**
	* @var date $fechca_nac
	* 
	* @ORM\Column(name="fecha_nac", type="date")
	*/
	private $fechca_nac;
}