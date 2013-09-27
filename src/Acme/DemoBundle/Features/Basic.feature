Feature: Basic routes and templates
  In order to work with framework
  As a symfony2 developer
  I need to be able to use routes

  Scenario: User reaches index page of Demo Bundle
    Given I am on homepage
    When I go to "/demo/"
    Then I should see "Available demos"

  Scenario: User uses route with default parameter
    Given I am on homepage
    When I go to "/demo/hello"
    Then I should see "Hello World!"

  Scenario: User uses parameter in /demo/hello/ routes
    Given I am on homepage
    When I go to "/demo/hello/Eldar"
    Then I should see "Hello Eldar!"
