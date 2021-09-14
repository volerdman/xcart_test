<?php

namespace XLite\Model\Proxy\__CG__\XLite\Module\XC\MailChimp\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class MailChimpSegment extends \XLite\Module\XC\MailChimp\Model\MailChimpSegment implements \Doctrine\ORM\Proxy\Proxy
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
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
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
     * {@inheritDoc}
     * @param string $name
     */
    public function __get($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);

        return parent::__get($name);
    }

    /**
     * {@inheritDoc}
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

        return parent::__set($name, $value);
    }

    /**
     * {@inheritDoc}
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

        return parent::__isset($name);

    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'name', 'created_date', 'static', 'list', 'useOrdersLastMonth', 'ordersLastMonth', 'useOrderAmount', 'orderAmount', 'useMemberships', 'memberships', 'useProducts', 'products', 'profiles', 'enabled', '_previous_state'];
        }

        return ['__isInitialized__', 'id', 'name', 'created_date', 'static', 'list', 'useOrdersLastMonth', 'ordersLastMonth', 'useOrderAmount', 'orderAmount', 'useMemberships', 'memberships', 'useProducts', 'products', 'profiles', 'enabled', '_previous_state'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (MailChimpSegment $proxy) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function isProfileSubscribed(\XLite\Model\Profile $profile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isProfileSubscribed', [$profile]);

        return parent::isProfileSubscribed($profile);
    }

    /**
     * {@inheritDoc}
     */
    public function checkProfileConditions(\XLite\Model\Profile $profile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checkProfileConditions', [$profile]);

        return parent::checkProfileConditions($profile);
    }

    /**
     * {@inheritDoc}
     */
    public function checkOrdersLastMonthCondition(\XLite\Model\Profile $profile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checkOrdersLastMonthCondition', [$profile]);

        return parent::checkOrdersLastMonthCondition($profile);
    }

    /**
     * {@inheritDoc}
     */
    public function checkOrderAmountCondition(\XLite\Model\Profile $profile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checkOrderAmountCondition', [$profile]);

        return parent::checkOrderAmountCondition($profile);
    }

    /**
     * {@inheritDoc}
     */
    public function checkMembershipsCondition(\XLite\Model\Profile $profile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checkMembershipsCondition', [$profile]);

        return parent::checkMembershipsCondition($profile);
    }

    /**
     * {@inheritDoc}
     */
    public function checkProductsCondition(\XLite\Model\Profile $profile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checkProductsCondition', [$profile]);

        return parent::checkProductsCondition($profile);
    }

    /**
     * {@inheritDoc}
     */
    public function doProfileSubscribe(\XLite\Model\Profile $profile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'doProfileSubscribe', [$profile]);

        return parent::doProfileSubscribe($profile);
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedDate($createdDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedDate', [$createdDate]);

        return parent::setCreatedDate($createdDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedDate', []);

        return parent::getCreatedDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatic($static)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatic', [$static]);

        return parent::setStatic($static);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatic()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatic', []);

        return parent::getStatic();
    }

    /**
     * {@inheritDoc}
     */
    public function setUseOrdersLastMonth($useOrdersLastMonth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUseOrdersLastMonth', [$useOrdersLastMonth]);

        return parent::setUseOrdersLastMonth($useOrdersLastMonth);
    }

    /**
     * {@inheritDoc}
     */
    public function getUseOrdersLastMonth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUseOrdersLastMonth', []);

        return parent::getUseOrdersLastMonth();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrdersLastMonth($ordersLastMonth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrdersLastMonth', [$ordersLastMonth]);

        return parent::setOrdersLastMonth($ordersLastMonth);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrdersLastMonth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrdersLastMonth', []);

        return parent::getOrdersLastMonth();
    }

    /**
     * {@inheritDoc}
     */
    public function setUseOrderAmount($useOrderAmount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUseOrderAmount', [$useOrderAmount]);

        return parent::setUseOrderAmount($useOrderAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function getUseOrderAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUseOrderAmount', []);

        return parent::getUseOrderAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrderAmount($orderAmount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrderAmount', [$orderAmount]);

        return parent::setOrderAmount($orderAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderAmount', []);

        return parent::getOrderAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setUseMemberships($useMemberships)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUseMemberships', [$useMemberships]);

        return parent::setUseMemberships($useMemberships);
    }

    /**
     * {@inheritDoc}
     */
    public function getUseMemberships()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUseMemberships', []);

        return parent::getUseMemberships();
    }

    /**
     * {@inheritDoc}
     */
    public function setUseProducts($useProducts)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUseProducts', [$useProducts]);

        return parent::setUseProducts($useProducts);
    }

    /**
     * {@inheritDoc}
     */
    public function getUseProducts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUseProducts', []);

        return parent::getUseProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabled', []);

        return parent::getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setList(\XLite\Module\XC\MailChimp\Model\MailChimpList $list = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setList', [$list]);

        return parent::setList($list);
    }

    /**
     * {@inheritDoc}
     */
    public function getList()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getList', []);

        return parent::getList();
    }

    /**
     * {@inheritDoc}
     */
    public function addMemberships(\XLite\Model\Membership $memberships)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMemberships', [$memberships]);

        return parent::addMemberships($memberships);
    }

    /**
     * {@inheritDoc}
     */
    public function getMemberships()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMemberships', []);

        return parent::getMemberships();
    }

    /**
     * {@inheritDoc}
     */
    public function addProducts(\XLite\Model\Product $products)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProducts', [$products]);

        return parent::addProducts($products);
    }

    /**
     * {@inheritDoc}
     */
    public function getProducts()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProducts', []);

        return parent::getProducts();
    }

    /**
     * {@inheritDoc}
     */
    public function addProfiles(\XLite\Model\Profile $profiles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProfiles', [$profiles]);

        return parent::addProfiles($profiles);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfiles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfiles', []);

        return parent::getProfiles();
    }

    /**
     * {@inheritDoc}
     */
    public function buildDataForREST($withAssociations = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'buildDataForREST', [$withAssociations]);

        return parent::buildDataForREST($withAssociations);
    }

    /**
     * {@inheritDoc}
     */
    public function getModelAssociationsForREST()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModelAssociationsForREST', []);

        return parent::getModelAssociationsForREST();
    }

    /**
     * {@inheritDoc}
     */
    public function _getPreviousState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '_getPreviousState', []);

        return parent::_getPreviousState();
    }

    /**
     * {@inheritDoc}
     */
    public function map(array $data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'map', [$data]);

        return parent::map($data);
    }

    /**
     * {@inheritDoc}
     */
    public function __unset($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__unset', [$name]);

        return parent::__unset($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getRepository()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRepository', []);

        return parent::getRepository();
    }

    /**
     * {@inheritDoc}
     */
    public function checkCache()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'checkCache', []);

        return parent::checkCache();
    }

    /**
     * {@inheritDoc}
     */
    public function detach()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'detach', []);

        return parent::detach();
    }

    /**
     * {@inheritDoc}
     */
    public function __call($method, array $args = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$method, $args]);

        return parent::__call($method, $args);
    }

    /**
     * {@inheritDoc}
     */
    public function isPropertyExists($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPropertyExists', [$name]);

        return parent::isPropertyExists($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setterProperty($property, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setterProperty', [$property, $value]);

        return parent::setterProperty($property, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function getterProperty($property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getterProperty', [$property]);

        return parent::getterProperty($property);
    }

    /**
     * {@inheritDoc}
     */
    public function isPersistent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPersistent', []);

        return parent::isPersistent();
    }

    /**
     * {@inheritDoc}
     */
    public function isDetached()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDetached', []);

        return parent::isDetached();
    }

    /**
     * {@inheritDoc}
     */
    public function isManaged()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isManaged', []);

        return parent::isManaged();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueIdentifierName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueIdentifierName', []);

        return parent::getUniqueIdentifierName();
    }

    /**
     * {@inheritDoc}
     */
    public function getUniqueIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniqueIdentifier', []);

        return parent::getUniqueIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityName', []);

        return parent::getEntityName();
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldMetadata($property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldMetadata', [$property]);

        return parent::getFieldMetadata($property);
    }

    /**
     * {@inheritDoc}
     */
    public function update()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'update', []);

        return parent::update();
    }

    /**
     * {@inheritDoc}
     */
    public function create()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'create', []);

        return parent::create();
    }

    /**
     * {@inheritDoc}
     */
    public function delete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'delete', []);

        return parent::delete();
    }

    /**
     * {@inheritDoc}
     */
    public function processFiles($field, array $data)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'processFiles', [$field, $data]);

        return parent::processFiles($field, $data);
    }

    /**
     * {@inheritDoc}
     */
    public function cloneEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'cloneEntity', []);

        return parent::cloneEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldsDefinition($class = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFieldsDefinition', [$class]);

        return parent::getFieldsDefinition($class);
    }

    /**
     * {@inheritDoc}
     */
    public function prepareEntityBeforeCommit($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prepareEntityBeforeCommit', [$type]);

        return parent::prepareEntityBeforeCommit($type);
    }

    /**
     * {@inheritDoc}
     */
    public function isSerializable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSerializable', []);

        return parent::isSerializable();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
