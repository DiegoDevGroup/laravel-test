
# Basic Laravel Test Repo

This repo is meant to be a test repo for potential junior developers applying for a position. Nothing about this repo should be too difficult to correct and would honestly take a seasoned Laravel developer approximately 15 to 30 minutes to complete every task, including the most Advanced Task, so don't over think the solutions. Most of the time, the simplest solution is the correct solution. There can also be more that one "right way" of fixing any one of the challenges. Simple working code always trumps more complex non-working code.

If you are using this repo as part of the interview process for the [DiegoDev Group](https://diegodev.com) then know you are not required to complete all task, you are not even required to complete a section, just simply complete "what you can" and assure everything you complete is working correctly before submitting your repo for review.

## SetUp


Again, there isn't anything "tricky" about this repo, the application should run on a system configured to meet requirements of a basic Laravel application. No need to install any other special PHP Extensions. Most of the task can be completed by simply running the Laravel internal server. Some of the task require an external datastore(*) such as MySQL or Postgres. * SQLite should work for many of the task expect for task requiring UUID in the Advanced section. 

## Basic Task

- [ ] Fork this repo into your Github account
- [ ] Get application up and running.
- [ ] Fix this list so it justify to the left without losing the format of the rest of page.
- [ ] Go to route /products and tell me specifically what is wrong, if anything, and fix it.
- [ ] Create a resourceful Controller for a object called Review.
- [ ] Add a route that points to your Review Controller and make sure it uses a Blade View.
- [ ] Can you explain to me why the route /specials is failing and fix it.
- [ ] What version of Laravel is this application using?

## Simple Task

- [ ] Populate a database with tables for the project.
- [ ] Add some test to the repo to automate testing of the application.
- [ ] Upgrade this application to the current version of Laravel and assure that everything is still working. If it's not, fix it.
- [ ] Add User authentication to application, including User Registration and User Login pages.
- [ ] Make it so users must validate their email address before they are able to log in.
- [ ] If you haven't already done so, `seed` your database with data.
- [ ] Create an API Endpoint that generates a JSON response of all Products.
- [ ] Create a new branch in your repo and call it `tailwind`. On this branch, upgrade the site to use TailwindCSS.

## Advanced Task

- [ ] Sign your commits.
- [ ] When adding additional items to the cart of something that had already been added, it is only registering a quantity of 1. Fix this. 
- [ ] Add VueJS to repo and make the `Add to cart` a Vue Component that keeps you on the page when adding products to your cart.
- [ ] Upgrade the IDs for products to be UUIDs. Assure everything still works, adding to cart, purchase, and reviews.
- [ ] Add a pivot table to allow users to leave comments of products. No need to create the interfaces with this, as long as it works in tinker. 

## Submit your repo

Please copy your `.env` file to `.env.app` and commit it to your repo.
Open a Pull Request back to this repo with your changes when you are done. 
