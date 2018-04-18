<?php

namespace FormBuilderBundle\Storage\Form;

use Pimcore\Model;

class Listing extends Model\Listing\AbstractListing
{
    /**
     * @var array
     */
    protected $data;

    /**
     * Test if the passed key is valid
     *
     * @param string $key
     *
     * @return boolean
     */
    public function isValidOrderKey($key)
    {
        return true;
    }

    /**
     * @param array $data
     *
     * @return void
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getData()
    {
        if ($this->data === null) {
            $entities = [];
            foreach ($this->load() as $o) {
                $entities[] = $o;
            }

            $this->data = $entities;

        }

        return $this->data;
    }
}
