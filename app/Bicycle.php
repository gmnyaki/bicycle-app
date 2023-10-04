<?php

namespace App;

/**
 * Class Bicycle
 *
 * The Bicycle class represents a bicycle object with color, brand, and speed properties.
 *
 * @package App
 */
class Bicycle
{
    private $color;
    private $brand;
    private $currentSpeed = 0;

    /**
     * Bicycle constructor.
     *
     * @param string $color The color of the bicycle.
     * @param string $brand The brand of the bicycle.
     *
     * @throws \InvalidArgumentException If color or brand is empty.
     */
    public function __construct($color, $brand)
    {
        if (empty($color) || empty($brand)) {
            throw new \InvalidArgumentException("Color and brand must not be empty.");
        }

        $this->color = $color;
        $this->brand = $brand;
    }

    /**
     * Get the color of the bicycle.
     *
     * @return string color.
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Get the brand of the bicycle.
     *
     * @return string brand.
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Get the current speed of the bicycle.
     *
     * @return int currentSpeed.
     */
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * Accelerate the bicycle's speed by a specified amount.
     *
     * @param int $speedIncrease .
     *
     * @return int current bike speed.
     */
    public function accelerate($speedIncrease)
    {
        if ($speedIncrease < 0) {
            throw new \InvalidArgumentException("Speed increase must be a non-negative value.");
        }

        $this->currentSpeed += $speedIncrease;
        return $this->currentSpeed;
    }
}
