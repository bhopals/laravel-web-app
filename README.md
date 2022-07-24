### Steps to setup project from scratch

#### laraval-web-app

0. PREREQUISITE

-   Since Laravel APP need AWS MySql Server and S3 Bucket, so make sure you have
    already set those up following the steps given in the REPO -https://github.com/bhopals/aws-sdk-lambda-stack-node

-   When you run `cdk deploy`, it may take 8 to 10 minutes to complete.
-   Once completed, it will OUTPUT MySQL DB and AWS Bucket Configuration.

1. Checkout the repo

    - `git clone git@github.com:bhopals/laravel-web-app.git`

2. Install dependencies

    - `compose install`
    - `npm install`

3. Rename `.env.example` to `.env`

4. Update ENVIRONMENT VARIABLES (MySql HOST Details and S3 Bucket Configurations)

    - DB (Refer Lambda Environment Variable)

        - DB_CONNECTION=mysql
        - DB_HOST=<host-to-be-copied-from-stack-output>
        - DB_PORT=<port-to-be-copied-from-stack-output>
        - DB_DATABASE=<database-name-to-be-copied-from-stack-output>
        - DB_USERNAME=<user-name-to-be-copied-from-stack-output>
        - DB_PASSWORD=<password-to-be-copied-from-stack-output>

    - AWS S3

        - AWS_ACCESS_KEY_ID=<to-be-created-in-aws-iam>
        - AWS_SECRET_ACCESS_KEY=<to-be-created-in-aws-iam>
        - AWS_DEFAULT_REGION=us-west-2
        - AWS_BUCKET=<bucket-name-to-be-copied-from-stack-output>

    - PASSPORT Public/Private Key (Refer Doc - `REAMDME_PASSPORT.md`)
        - PASSPORT_PUBLIC_KEY=<you-need-to-generate>
        - PASSPORT_PRIVATE_KEY=<you-need-to-generate>

-   REFERENCE
    -   Lambda Environment Variables
        -   https://docs.aws.amazon.com/lambda/latest/dg/configuration-envvars.html
    -   Create ACCESS KEYs
        -   https://docs.aws.amazon.com/powershell/latest/userguide/pstools-appendix-sign-up.html

5. Run Migration

    - `php artisan migrate`

6. Install Passport to generate Personal access

    `php artisan passport:install`

7. Run on local

    `php artisan serve`

8. Deploy on AWS
   `serverless deploy`
