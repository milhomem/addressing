<?php

namespace CommerceGuys\Addressing\Model;

interface SubdivisionEntityInterface extends SubdivisionInterface
{
    /**
     * Sets the subdivision parent.
     *
     * @param SubdivisionEntityInterface|null $parent The subdivision parent.
     */
    public function setParent(SubdivisionEntityInterface $parent = null);

    /**
     * Sets the two-letter country code.
     *
     * @param string $countryCode The two-letter country code.
     */
    public function setCountryCode($countryCode);

    /**
     * Sets the subdivision id.
     *
     * @param string $id The subdivision id.
     */
    public function setId($id);

    /**
     * Sets the subdivision code.
     *
     * @param string $code The subdivision code.
     */
    public function setCode($code);

    /**
     * Sets the subdivision name.
     *
     * @param string $name The subdivision name.
     */
    public function setName($name);

    /**
     * Sets the postal code pattern.
     *
     * @param string $postalCodePattern The postal code pattern.
     */
    public function setPostalCodePattern($postalCodePattern);

    /**
     * Sets the postal code pattern type.
     *
     * @param string $postalCodePatternType The postal code pattern type.
     */
    public function setPostalCodePatternType($postalCodePatternType);

    /**
     * Sets the subdivision children.
     *
     * @param SubdivisionEntityInterface[] $children The subdivision children.
     */
    public function setChildren($children);

    /**
     * Adds a child.
     *
     * @param SubdivisionEntityInterface $child The child.
     */
    public function addChild(SubdivisionEntityInterface $child);

    /**
     * Removes a child.
     *
     * @param SubdivisionEntityInterface $child The child.
     */
    public function removeChild(SubdivisionEntityInterface $child);

    /**
     * Checks whether the subdivision has a child.
     *
     * @param SubdivisionEntityInterface $child The child.
     *
     * @return bool True if the child was found, false otherwise.
     */
    public function hasChild(SubdivisionEntityInterface $child);
}
