<?php

namespace Proxies\__CG__\TRC\CoreBundle\Entity\DDC;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class FDDC extends \TRC\CoreBundle\Entity\DDC\FDDC implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\FDDC' . "\0" . 'id', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\FDDC' . "\0" . 'dateajout', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\FDDC' . "\0" . 'ddc', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\FDDC' . "\0" . 'docddc', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\FDDC' . "\0" . 'fichier', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\FDDC' . "\0" . 'fonction'];
        }

        return ['__isInitialized__', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\FDDC' . "\0" . 'id', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\FDDC' . "\0" . 'dateajout', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\FDDC' . "\0" . 'ddc', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\FDDC' . "\0" . 'docddc', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\FDDC' . "\0" . 'fichier', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\FDDC' . "\0" . 'fonction'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (FDDC $proxy) {
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
    public function setDdc(\TRC\CoreBundle\Entity\DDC\DDC $ddc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDdc', [$ddc]);

        return parent::setDdc($ddc);
    }

    /**
     * {@inheritDoc}
     */
    public function getDdc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDdc', []);

        return parent::getDdc();
    }

    /**
     * {@inheritDoc}
     */
    public function setFichier(\TRC\CoreBundle\Entity\DDC\Fichier $fichier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFichier', [$fichier]);

        return parent::setFichier($fichier);
    }

    /**
     * {@inheritDoc}
     */
    public function getFichier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFichier', []);

        return parent::getFichier();
    }

    /**
     * {@inheritDoc}
     */
    public function setDocddc(\TRC\CoreBundle\Entity\DDC\DOCDDC $docddc = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocddc', [$docddc]);

        return parent::setDocddc($docddc);
    }

    /**
     * {@inheritDoc}
     */
    public function getDocddc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocddc', []);

        return parent::getDocddc();
    }

    /**
     * {@inheritDoc}
     */
    public function setFonction(\TRC\CoreBundle\Entity\Fonction $fonction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFonction', [$fonction]);

        return parent::setFonction($fonction);
    }

    /**
     * {@inheritDoc}
     */
    public function getFonction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFonction', []);

        return parent::getFonction();
    }

}
