<?php

namespace XuTL\Tim;

/**
 * Trait HasTIM
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
trait HasTIM
{
    /**
     * Boot the trait.
     * @return void
     */
    public static function bootTIMable()
    {
        static::observe(new UserObserver());
    }

    /**
     * Get the value used to index the model.
     *
     * @return mixed
     */
    public function getScoutKey()
    {
        return $this->getKey();
    }
}