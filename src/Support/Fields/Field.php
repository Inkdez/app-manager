<?php

namespace Inkdez\AppManager\Support\Fields;

use DragonCode\Support\Facades\Helpers\Arr;

abstract class Field
{
	public String $name;
	public array $rules;
	public bool $hidden;
    public String $type;
    public $placeholder;
    public int $position;

    public function __construct()
    {
        $this->rules = array();

        $this->hidden = false;
    }


	public  function addName(String $name): self
	{
		$this->name = $name;
		return $this;
	}

	public function addValidationRules(String|array $rules): self
	{
		if(is_string($rules))
        $this->rules = Arr::merge($this->rules,[$rules]);
		else {
			$this->rules = Arr::merge($this->rules,$rules);
		}
		return $this;
	}

	public function syncVlidationRules(array $rules):self
	{
		$this->rules = $rules;
		return $this;
	}

	public function addCollection(): self
	{
		return $this;
	}

	public function switchHidden(): self
	{
		$this->hidden = !$this->hidden;
		return $this;
	}


	/**
	 * Get the value of name
	 *
	 * @return String
	 */
	public function getName(): String
	{
		return $this->name;
	}

    /**
     * Get the value of type
     *
     * @return String
     */
    public function getType(): String
    {
        return $this->type;
    }

    public function getInstance():self
    {
        return $this;
    }

    public function newInstance()
    {
        return new $this;
    }

    public function setPlaceholder(String $placeholder = ''):self
    {
        $this->placeholder = $placeholder;
        return $this;
    }


    /**
     * Set the value of position
     *
     * @param int $position
     *
     * @return self
     */
    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function fromJson(mixed $object ): self {
        if(property_exists($this,'position')) $this->setPosition($object->position);
        if(property_exists($this,'type')) $this->type = $object->type;
        if(property_exists($this,'name')) $this->addName($object->name);
        if(property_exists($this,'placeholder')) $this->setPlaceholder($object->placeholder);
        if(property_exists($this,'options')) $this->addOption($object->options);
        if(property_exists($this,'limit')) $this->setLimit($object->limit);
        if(property_exists($this,'rules')) $this->addValidationRules($object->rules);
        return $this;
    }
}
