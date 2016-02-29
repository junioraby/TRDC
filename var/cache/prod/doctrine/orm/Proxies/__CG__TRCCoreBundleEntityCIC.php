<?php

namespace Proxies\__CG__\TRC\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CIC extends \TRC\CoreBundle\Entity\CIC implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'TRC\\CoreBundle\\Entity\\CIC' . "\0" . 'id', '' . "\0" . 'TRC\\CoreBundle\\Entity\\CIC' . "\0" . 'nom', '' . "\0" . 'TRC\\CoreBundle\\Entity\\CIC' . "\0" . 'matricule', '' . "\0" . 'TRC\\CoreBundle\\Entity\\CIC' . "\0" . 'description', '' . "\0" . 'TRC\\CoreBundle\\Entity\\CIC' . "\0" . 'dateajout', '' . "\0" . 'TRC\\CoreBundle\\Entity\\CIC' . "\0" . 'code', '' . "\0" . 'TRC\\CoreBundle\\Entity\\CIC' . "\0" . 'entite'];
        }

        return ['__isInitialized__', '' . "\0" . 'TRC\\CoreBundle\\Entity\\CIC' . "\0" . 'id', '' . "\0" . 'TRC\\CoreBundle\\Entity\\CIC' . "\0" . 'nom', '' . "\0" . 'TRC\\CoreBundle\\Entity\\CIC' . "\0" . 'matricule', '' . "\0" . 'TRC\\CoreBundle\\Entity\\CIC' . "\0" . 'description', '' . "\0" . 'TRC\\CoreBundle\\Entity\\CIC' . "\0" . 'dateajout', '' . "\0" . 'TRC\\CoreBundle\\Entity\\CIC' . "\0" . 'code', '' . "\0" . 'TRC\\CoreBundle\\Entity\\CIC' . "\0" . 'entite'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CIC $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
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
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateajout($dateajout)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateajout', [$dateajout]);

        return parent::setDateajout($dateajout);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateajout()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateajout', []);

        return parent::getDateajout();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode($code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', [$code]);

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', []);

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatricule($matricule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatricule', [$matricule]);

        return parent::setMatricule($matricule);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatricule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatricule', []);

        return parent::getMatricule();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntite(\TRC\CoreBundle\Entity\Entite $entite = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntite', [$entite]);

        return parent::setEntite($entite);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntite', []);

        return parent::getEntite();
    }

}
