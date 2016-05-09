<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Pedido
 *
 * @ORM\Table(name="pedido")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\pedidoRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Pedido
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="integer", length=255)
     */
    private $precio;
    /**
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Articulo", cascade={"persist"}, inversedBy="pedidos")
     */
    private $articulos;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cliente", inversedBy="pedidos")
     */
    private $clientes;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    public function __construct()
    {
        $this->clientes = new ArrayCollection();
        $this->articulos    = new ArrayCollection();

        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime("now");
    }
    /**
     * @ORM\PreUpdate
     */
    public function setUpdatedAtValue() {
        $this->setUpdatedAt(new \DateTime());
    }
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set fecha
     *
     * @param string $precio
     *
     * @return pedido
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
        return $this;
    }
    /**
     * Get fecha
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }
    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return pedido
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return pedido
     */
    public function setUpdatedAt()
    {
        $this->updatedAt = new \Datetime("now");
        return $this;
    }
    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
     * Add articulo
     *
     * @param \AppBundle\Entity\Articulo $articulo
     *
     * @return Pedido
     */
    public function addArticulo(\AppBundle\Entity\Articulo $articulo)
    {
        $this->articulos[] = $articulo;
        return $this;
    }
    /**
     * Remove articulo
     *
     * @param \AppBundle\Entity\Articulo $articulo
     */
    public function removeArticulo(\AppBundle\Entity\Articulo $articulo)
    {
        $this->articulos->removeElement($articulo);
    }
    /**
     * Get articulos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticulos()
    {
        return $this->articulos;
    }


    /**
     * Set cliente
     *
     * @param \Appbundle\Entity\Cliente $cliente
     *
     * @return Pedido
     */
    public function setCliente(\Appbundle\Entity\Cliente $cliente = null)
    {
        $this->clientes = $cliente;
        return $this;
    }
    /**
     * Get cliente
     *
     * @return \Appbundle\Entity\Cliente
     */
    public function getCliente()
    {
        return $this->clientes;
    }
    /**
     * añadir cliente
     *
     * @param \Appbundle\Entity\Cliente $cliente
     *
     * @return Pedido
     */
    public function añadirCliente(\Appbundle\Entity\Cliente $cliente)
    {
        $this->clientes[] = $cliente;
        return $this;
    }

    /**
     * borrar cliente
     *
     * @param \Appbundle\Entity\Cliente $cliente
     */
    public function borrarCliente(\Appbundle\Entity\Cliente $cliente)
    {
        $this->clientes->removeElement($cliente);
    }
}