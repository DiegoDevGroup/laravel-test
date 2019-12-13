
# Basic Laravel Test Repo

This repository is meant to be a test project for potential junior developers applying for a position. Each task shouldn’t take longer than 30 minutes so don’t overthink your solutions. Most of the time, the simplest solution is the correct solution. There can also be more than one "right way" of fixing any one of the challenges. Simple working code always trumps more complex non-working code.

If you are using this repo as part of the interview process for the DiegoDev Group](https://diegodev.com) then know you are not required to complete all tasks, you are not even required to complete a section, just simply complete "what you can" and ensure everything you complete is working correctly before submitting your repo for review.

## SetUp

Again, there isn't anything "tricky" about this repo, the application should run on a system configured to meet the requirements of a basic Laravel application. No need to install any special PHP extensions. Most of the tasks can be completed by simply running the Laravel internal server but you are free to use a tool like Laravel Valet or Docker. Some of the tasks require an external datastore such as MySQL or Postgres. SQLite should work for many of the tasks except for tasks requiring UUIDs in the Advanced section.

## Basic Tasks

- [ ] Fork this repo into your Github account
- [ ] Get application up and running.
- [ ] Fix this list so it justify to the left without losing the format of the rest of page.
- [ ] Go to route /products and tell me specifically what is wrong, if anything, and fix it.
- [ ] Create a resourceful Controller for an object called Review.
- [ ] Add a route that points to your Review Controller and have it return a new blade view
- [ ] Can you explain to me why the route /specials is failing and fix it.
- [ ] What version of Laravel is this application using?

## Simple Tasks

- [ ] Populate a database with tables for the project.
- [ ] Add some tests to the repo to automate testing of the application.
- [ ] Upgrade this application to the current version of Laravel and assure that everything is still working. If it's not, fix it.
- [ ] Add User authentication to application, including User Registration and User Login pages.
- [ ] Make it so users must validate their email address before they are able to log in.
- [ ] If you haven't already done so, `seed` your database with data.
- [ ] Create an API Endpoint that generates a JSON response of all Products.
- [ ] Create a new branch in your repo and call it `tailwind`. On this branch, upgrade the site to use TailwindCSS.

## Advanced Tasks

- [ ] Sign your commits using a GPG key.
- [ ] When adding additional items to the cart of something that had already been added, it is only registering a quantity of 1. Fix this. 
- [ ] Add VueJS to project and make the `Add to cart` a Vue Component that keeps you on the page when adding products to your cart.
- [ ] Upgrade the IDs for products to be UUIDs. Assure everything still works, adding to cart, purchase, and reviews.
- [ ] Add a pivot table to allow users to leave comments of products. No need to create the interfaces with this, as long as it works in tinker. 

## Submit your repo

Please copy your `.env` file to `.env.app` and commit it to your repo. Add any answers to the README file. 
ZIP up your repo and email it to me. 
