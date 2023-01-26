<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Livres extends \App\Entity\Livres implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'auteur', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'tome', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'serie', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'isbn', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'quantite', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'tarif', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'etat', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'pervers', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'genres'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'prix', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'auteur', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'tome', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'serie', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'isbn', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'quantite', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'tarif', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'etat', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'pervers', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Livres' . "\0" . 'genres'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Livres $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre(string $titre): \App\Entity\Livres
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix(float $prix): \App\Entity\Livres
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuteur(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuteur', []);

        return parent::getAuteur();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuteur(string $auteur): \App\Entity\Livres
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuteur', [$auteur]);

        return parent::setAuteur($auteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getTome(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTome', []);

        return parent::getTome();
    }

    /**
     * {@inheritDoc}
     */
    public function setTome(string $tome): \App\Entity\Livres
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTome', [$tome]);

        return parent::setTome($tome);
    }

    /**
     * {@inheritDoc}
     */
    public function getSerie(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSerie', []);

        return parent::getSerie();
    }

    /**
     * {@inheritDoc}
     */
    public function setSerie(int $serie): \App\Entity\Livres
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSerie', [$serie]);

        return parent::setSerie($serie);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsbn(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsbn', []);

        return parent::getIsbn();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsbn(string $isbn): \App\Entity\Livres
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsbn', [$isbn]);

        return parent::setIsbn($isbn);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantite(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantite', []);

        return parent::getQuantite();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantite(int $quantite): \App\Entity\Livres
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantite', [$quantite]);

        return parent::setQuantite($quantite);
    }

    /**
     * {@inheritDoc}
     */
    public function getTarif(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTarif', []);

        return parent::getTarif();
    }

    /**
     * {@inheritDoc}
     */
    public function setTarif(float $tarif): \App\Entity\Livres
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTarif', [$tarif]);

        return parent::setTarif($tarif);
    }

    /**
     * {@inheritDoc}
     */
    public function isEtat(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEtat', []);

        return parent::isEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat(bool $etat): \App\Entity\Livres
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', [$etat]);

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function isPervers(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPervers', []);

        return parent::isPervers();
    }

    /**
     * {@inheritDoc}
     */
    public function setPervers(bool $pervers): \App\Entity\Livres
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPervers', [$pervers]);

        return parent::setPervers($pervers);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(string $image): \App\Entity\Livres
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenres(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenres', []);

        return parent::getGenres();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenres(string $genres): \App\Entity\Livres
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenres', [$genres]);

        return parent::setGenres($genres);
    }

}
