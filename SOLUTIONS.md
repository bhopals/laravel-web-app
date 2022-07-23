#### SETUP

-   Install Node JS

    -   https://nodejs.org/en/download/
    -   Once installed, you can check - `node -v`

-   Install AWS CLI

    -   https://docs.aws.amazon.com/cli/latest/userguide/getting-started-install.html
    -   Once installed, you can check - `aws --version`

-   Generate ACCESS ID and SECRETS

    -   https://docs.aws.amazon.com/cli/latest/userguide/cli-configure-quickstart.html#cli-configure-quickstart-creds-create
    -   Download created ACCESS ID and SECRET Details

-   Configure AWS CLI (Use above generated ACCESS and SECRET Details)
    -   https://docs.aws.amazon.com/cli/latest/userguide/cli-configure-quickstart.html

#### TASK 1

-   Repo: https://github.com/bhopals/aws-sdk-lambda-stack-node
-   Refer - READE.md

-   Documentation
    -   https://docs.aws.amazon.com/cdk/api/v2/docs/aws-cdk-lib.aws_lambda_nodejs-readme.html
    -   https://docs.aws.amazon.com/AWSJavaScriptSDK/v3/latest/clients/client-lambda/

#### TASK 2

-   Repo: https://github.com/bhopals/aws-sdk-rds-stack-node
-   Refer - READE.md

-   Documentation

    -   RDS

        -   https://docs.aws.amazon.com/cdk/api/v1/docs/aws-rds-readme.html
        -   https://docs.aws.amazon.com/cdk/api/v2/docs/aws-cdk-lib.aws_rds-readme.html
        -   https://aws.amazon.com/blogs/infrastructure-and-automation/use-aws-cdk-to-initialize-amazon-rds-instances/
        -   https://github.com/aws-samples/amazon-rds-init-cdk

    -   S3

        -   https://docs.aws.amazon.com/cdk/api/v1/docs/aws-s3-readme.html
        -   https://docs.aws.amazon.com/AWSJavaScriptSDK/v3/latest/clients/client-s3/index.html

    -   The Output of Stack creation would be like

        Outputs:
        laravel-app.endpoint = laravel-app-public-db-rds.cdm52b9fgktj.us-west-2.rds.amazonaws.com
        laravel-app.publicLambdaUrl = https://26sek4btytdbmh62265td35jt40fmzeh.lambda-url.us-west-2.on.aws/
        laravel-app.s3bucket = laravel-app-laravelappappdetailsbucket4838ade5-1ma30qousksem
        laravel-app.s3bucketarn = arn:aws:s3:::laravel-app-laravelappappdetailsbucket4838ade5-1ma30qousksem

#### TASK 3 and Task 4

-   Repo - https://github.com/bhopals/laravel-web-app

-   Laravel Docs

    -   https://laravel.com/
    -   https://laravel.com/docs/5.1/filesystem (S3)
    -   https://laravel.com/docs/5.1/database (DB)
    -   https://laravel.com/docs/5.1/authentication (AUTHENTICATION)
