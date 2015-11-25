<?php

namespace Ais\DosenBundle\Model;

Interface DosenInterface
{
    /**
     * Set title
     *
     * @param string $title
     * @return DosenInterface
     */
    public function setTitle($title);

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle();

    /**
     * Set body
     *
     * @param string $body
     * @return DosenInterface
     */
    public function setBody($body);

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody();
}
