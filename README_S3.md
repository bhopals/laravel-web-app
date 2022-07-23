### S3

#### Setup

-   Install flysystem S3 package
    `composer require aws/aws-sdk-php`
    `composer require league/flysystem-aws-s3-v3`

-   Policy
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
    "Resource": "arn:aws:s3:::laravel-app-test",
    "Principal": "\*"
    }
    ]
    }
