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
    /**
     * @var string The color of the bicycle.
     */
    private $color;

    /**
     * @var string The brand of the bicycle.
     */
    private $brand;

    /**
     * @var int The current speed of the bicycle.
     */
    private $currentSpeed = 0;

    /**
     * Bicycle constructor.
     *
     * @param string $color.
     * @param string $brand. 
     */
    public function __construct($color, $brand)
    {
        $this->color = $color;
        $this->brand = $brand;
    }

    /**
     * Get the color of the bicycle.
     *
     * @return string The color of the bicycle.
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Get the brand of the bicycle.
     *
     * @return string The brand of the bicycle.
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Get the current speed of the bicycle.
     *
     * @return int current bicycle speed.
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
     * @return int updated current speed of the bicycle.
     */
    public function accelerate($speedIncrease)
    {
        $this->currentSpeed += $speedIncrease;
        return $this->currentSpeed;
    }
}
