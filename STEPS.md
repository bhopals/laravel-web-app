##### Steps

1. Create Resources

    - Checkout the REPOSITORY - `git clone git@github.com:bhopals/laravel-web-app.git`
    - Follow the STEPS give in the REPO - https://github.com/bhopals/aws-sdk-rds-stack-node

    - Deploy Resources

        - `cdk bootstrap`
        - `cdk synth`
        - `cdk deploy`

    - Delete Deployed Resources

        - `cdk destroy`

2. Copy OUTPUT details

    OUTPUTS:

    - endpoint = laravel-app-public-db-rds.cdm52b9fgktj.us-west-2.rds.amazonaws.com
    - publicLambdaUrl = https://26sek4btytdbmh62265td35jt40fmzeh.lambda-url.us-west-2.on.aws/
    - s3bucket = laravel-app-laravelappappdetailsbucket4838ade5-1ma30qousksem
    - s3bucketarn = arn:aws:s3:::laravel-app-laravelappappdetailsbucket4838ade5-1ma30qousksem

3. Checkout Laravel APP

    - Checkout the REPOSITORY - `git clone git@github.com:bhopals/laravel-web-app.git`
    - `composer install`

4. Update ENV variables in `.env`

    - Use above generated resources and update `.env`

5. Laravel Database Migration

    - `php artisan migrate`

6. Deploy Laravel Application

    - `serverless deploy`

7. Remove Deployed Laravel Application

    - `serverless remove`
