<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Company extends \App\Entity\Company implements \Doctrine\Persistence\Proxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
        __clone as private __doClone;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'active' => [parent::class, 'active', null],
        "\0".parent::class."\0".'ccc' => [parent::class, 'ccc', null],
        "\0".parent::class."\0".'events' => [parent::class, 'events', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'nif' => [parent::class, 'nif', null],
        "\0".parent::class."\0".'salaryperhour' => [parent::class, 'salaryperhour', null],
        "\0".parent::class."\0".'title' => [parent::class, 'title', null],
        "\0".parent::class."\0".'users' => [parent::class, 'users', null],
        'active' => [parent::class, 'active', null],
        'ccc' => [parent::class, 'ccc', null],
        'events' => [parent::class, 'events', null],
        'id' => [parent::class, 'id', null],
        'nif' => [parent::class, 'nif', null],
        'salaryperhour' => [parent::class, 'salaryperhour', null],
        'title' => [parent::class, 'title', null],
        'users' => [parent::class, 'users', null],
    ];

    /**
     * @internal
     */
    public bool $__isCloning = false;

    public function __construct(?\Closure $initializer = null)
    {
        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
            '__isCloning' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __clone()
    {
        $this->__isCloning = true;

        try {
            $this->__doClone();
        } finally {
            $this->__isCloning = false;
        }
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}