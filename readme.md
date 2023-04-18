# Random Generator


## Repository
<https://github.com/philipjlin/Random_Generator_Webapp>


## Description
A web application with two tools - one for generating lorem ipsum text, and another for generation random user data.

The lorem ipsum generator outputs random lorem ipsum text, with the amount of words or sentences that the user wants as input.

The random user generator creates a fake profile of a random individual, with options to display the name, address, phone number, email, username, and password for the profile. A randomly generated avatar image is also displayed.

Outside sources used: 
fzaninotto/faker PHP library (github.com/fzaninotto/Faker)
badcom/lorem-ipsum Lorem Ipsum generator (github.com/Badcow/LoremIpsum)


## Technologies
Developed in PHP.


## High Level Components
    * User authorization service
    * Home screen with tools
    * Contact page

## Class Overview
    Controllers
        - AuthController
        - PasswordController
        - HomeController
        - LoremIpsumController
        - RandomUserController


## Views
    - Home
    - LoremIpsum
    - RandomUser
    - Welcome
    - Contact
