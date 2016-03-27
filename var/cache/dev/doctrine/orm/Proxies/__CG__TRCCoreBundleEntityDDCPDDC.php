<?php

namespace Proxies\__CG__\TRC\CoreBundle\Entity\DDC;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PDDC extends \TRC\CoreBundle\Entity\DDC\PDDC implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\PDDC' . "\0" . 'id', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\PDDC' . "\0" . 'datedebut', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\PDDC' . "\0" . 'datefin', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\PDDC' . "\0" . 'phase', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\PDDC' . "\0" . 'ddc', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\PDDC' . "\0" . 'active'];
        }

        return ['__isInitialized__', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\PDDC' . "\0" . 'id', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\PDDC' . "\0" . 'datedebut', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\PDDC' . "\0" . 'datefin', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\PDDC' . "\0" . 'phase', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\PDDC' . "\0" . 'ddc', '' . "\0" . 'TRC\\CoreBundle\\Entity\\DDC\\PDDC' . "\0" . 'active'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PDDC $proxy) {
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
    public function setDatedebut($datedebut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatedebut', [$datedebut]);

        return parent::setDatedebut($datedebut);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatedebut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatedebut', []);

        return parent::getDatedebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatefin($datefin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatefin', [$datefin]);

        return parent::setDatefin($datefin);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatefin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatefin', []);

        return parent::getDatefin();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhase(\TRC\CoreBundle\Entity\DDC\Phase $phase)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhase', [$phase]);

        return parent::setPhase($phase);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhase()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhase', []);

        return parent::getPhase();
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
    public function setActeur(\TRC\CoreBundle\Entity\Acteur $acteur = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActeur', [$acteur]);

        return parent::setActeur($acteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getActeur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActeur', []);

        return parent::getActeur();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', [$active]);

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', []);

        return parent::getActive();
    }

}