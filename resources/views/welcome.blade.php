<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                font-size: x-large;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center">

            <div class="content">
                <div class="title">
                    Laravel Test Repo
                </div>

                <div>
                    Help debug the issues in this Laravel repo.
                </div>

                <h1>Basic Laravel Test Repo</h1>

                <p>
                    This repo is meant to be a test repo for potential junior developers applying for a position.
                    Nothing about this repo should be too difficult to correct and would honestly take a seasoned
                    Laravel developer approximately 15 to 30 minutes to complete every task, including the most
                    Advanced Task, so don't over think the solutions. Most of the time, the simplest solution is the
                    correct solution. There can also be more that one "right way" of fixing any one of the challenges.
                    Simple working code always trumps more complex non-working code.
                </p>

                <p>
                    If you are using this repo as part of the interview process for the <a href="https://diegodev.com">DiegoDev Group</a>
                    then know you are not required to complete all task, you are not even required to complete a section,
                    just simply complete "what you can" and assure everything you complete is working correctly before
                    submitting your repo for review.
                </p>


                <h2>SetUp</h2>

                <p>
                    Again, there isn't anything "tricky" about this repo, the application should run on a system
                    configured to meet requirements of a basic Laravel application. No need to install any other
                    special PHP Extensions. Most of the task can be completed by simply running the Laravel internal
                    server. Some of the task require an external datastore(*) such as MySQL or Postgres. * SQLite
                    should work for many of the task expect for task requiring UUID in the Advanced section.
                </p>

                <p><strong>Issues that need to be addressed:</strong></p>

                <h2>Basic Task</h2>

                <ul>
                    <li> Get application up and running.
                    <li> Fix this list so it justify to the left without losing the format of the rest of page.
                    <li>Go to route <a href="products">/products</a> and tell me specifically what is wrong and fix it.</li>
                    <li> Create a resourceful Controller for a object called Review.
                    <li> Add a route that points to your Review Controller and make sure it uses a Blade View.
                    <li> Can you explain to me why the route <a href="specials">/specials</a> is failing and fix it.
                    <li> What version of Laravel is this application using?
                </ul>

                <h2>Simple Task</h2>

                <ul>
                    <li> Populate a database with tables for the project and fill the products table using the seeder.
                        Return to the <a href="products">/products</a> page and confirm you see products there now.
                    <li> Add some test to the repo to automate testing of the application.
                    <li> Upgrade this application to the current version of Laravel and assure that everything is still working. If it's not, fix it.
                    <li> Add User authentication to application, including User Registration and User Login pages.
                    <li> Make it so users must validate their email address before they are able to log in.
                    <li> If you haven't already done so, `seed` your database with data.
                    <li> Create an API Endpoint that generates a JSON response of all Products.
                    <li> Create a new branch in your repo and call it `tailwind`. On this branch, upgrade the site to use TailwindCSS.
                </ul>

                <h2>Advanced Task</h2>

                <ul>
                    <li> Sign your commits.
                    <li> When adding additional items to the cart of something that had already been added, it is only registering a quantity of 1. Fix this.
                    <li> Add VueJS to repo and make the `Add to cart` a Vue Component that keeps you on the page when adding products to your cart.
                    <li> Upgrade the IDs for products to be UUIDs. Assure everything still works, adding to cart, purchase, and reviews.
                    <li> Add a pivot table to allow users to leave reviews of products. No need to create the blade
                        interfaces with this, as long as it works in tinker. Feel free to reuse the Review resourceful controller.
                </ul>
            <div>
                <h2>Submit your work</h2>
                <p>
                    Please copy your `.env` file to `.env.app` and commit it to your repo. Add any answers to the README file.
                </p>
            </div>

            </div>

        </div>
    </body>
</html>
