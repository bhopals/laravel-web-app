### S3

#### Setup

-   Install Both libraries
    `composer require aws/aws-sdk-php`
    `composer require league/flysystem-aws-s3-v3`

-   Update the .env with S3 details

    AWS_ACCESS_KEY_ID=<KEY-ID>
    AWS_SECRET_ACCESS_KEY=<ACCESS-KEY>
    AWS_DEFAULT_REGION=<REGION>
    AWS_BUCKET=<BUCKET-NAME>

-   CREATE A S3 Bucket
-   AWS S3 Bucket should have a Policy attached...
-   Attach Policy

    ```
    {
        "Id": "Policy1658584296518",
        "Version": "2012-10-17",
        "Statement": [
            {
            "Sid": "Stmt1658584294737",
            "Action": [
                "s3:DeleteObject",
                "s3:GetObject",
                "s3:PutObject"
            ],
                "Effect": "Allow",
                "Resource": "arn:aws:s3:::laravel-app-test/*",
                "Principal": "*"
            }
        ]
    }
    ```

-   SERVERLESS

    -   `serverless plugin install -n serverless-lift`
    -   REFER - https://github.com/getlift/lift/blob/master/docs/storage.md

-   Details - https://laravel.com/docs/5.1/filesystem
