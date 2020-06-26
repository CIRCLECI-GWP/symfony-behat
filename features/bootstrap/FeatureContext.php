<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Symfony\Component\HttpClient\HttpClient;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }


    /**
     * @Given I am an unauthenticated user
     */
    public function iAmAnUnauthenticatedUser()
    {
        throw new PendingException();
    }

    /**
     * @When I request a list of customers from :arg1
     */
    public function iRequestAListOfCustomersFrom($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then The results should include a customer with ID :arg1
     */
    public function theResultsShouldIncludeACustomerWithId($arg1)
    {
        throw new PendingException();
    }
}