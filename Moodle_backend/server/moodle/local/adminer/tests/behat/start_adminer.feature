@local @local_adminer
Feature: Start the adminer modal iframe
  In order to use adminer
  As an admin
  I need to be able to see the adminer frame

  @javascript
  Scenario: Start without the current database
    Given the following config values are set as admin:
      | startwithdb  | 0 | local_adminer |
    And I log in as "admin"
    And I click on "Site administration" "link"
    And I click on "Server" "link"
    And I should see "Moodle Adminer"
    And I click on "Moodle Adminer" "link" in the "#linkserver" "css_element"

  @javascript
  Scenario: Start with the current database
    Given the following config values are set as admin:
      | startwithdb  | 1 | local_adminer |
    And I log in as "admin"
    And I click on "Site administration" "link"
    And I click on "Server" "link"
    And I should see "Moodle Adminer"
    And I click on "Moodle Adminer" "link" in the "#linkserver" "css_element"
