<?php

namespace PortalContracts\Model\Webservice;

/**
 * Generic WS Error Interface. Setters return type purposely left to implementator's discretion.
 */
interface ErrorInterface
{
    public const DANGER  = 'DANGER';
    public const WARNING = 'WARNING';

    /**
     * @return string
     */
    public function getCode(): string;

    /**
     * @param string $code
     */
    public function setCode(string $code);

    /**
     * @return string
     */
    public function getMessage(): string;

    /**
     * @param string $message
     */
    public function setMessage($message): string;

    /**
     * @param array $context
     */
    public function setContext(array $context);

    /**
     * @return array
     */
    public function getContext(): array;
}
