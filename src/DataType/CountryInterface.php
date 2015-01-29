<?php

/**
 * @file
 * Contains \Triquanta\IziTravel\DataType\CountryInterface.
 */

namespace Triquanta\IziTravel\DataType;

/**
 * Defines a country data type.
 */
interface CountryInterface extends FactoryInterface, RevisionableInterface, TranslatableInterface, UuidInterface
{

  /**
   * A published country.
   */
  const STATUS_PUBLISHED = 'published';

  /**
   * Gets the country code.
   *
   * @return string|null
   *   An ISO 3166-1 alpha-2 country code.
   */
  public function getCountryCode();

  /**
   * Gets the map.
   *
   * @return \Triquanta\IziTravel\DataType\MapInterface|null
   */
  public function getMap();

  /**
   * Gets the translations.
   *
   * @return \Triquanta\IziTravel\DataType\CountryCityTranslationInterface[]
   */
  public function getTranslations();

  /**
   * Gets the location.
   *
   * @return \Triquanta\IziTravel\DataType\LocationInterface|null
   */
  public function getLocation();

  /**
   * Returns whether the country is published.
   *
   * @return bool
   */
  public function isPublished();

}
