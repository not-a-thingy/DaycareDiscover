const amplifyconfig = '''{
    "UserAgent": "aws-amplify-cli/2.0",
    "Version": "1.0",
    "api": {
        "plugins": {
            "awsAPIPlugin": {
                "daycarediscover": {
                    "endpointType": "GraphQL",
                    "endpoint": "https://liyoishus5gczbc6mtk62axfum.appsync-api.ap-southeast-2.amazonaws.com/graphql",
                    "region": "ap-southeast-2",
                    "authorizationType": "API_KEY",
                    "apiKey": "da2-wztxxufejfejteuwucmjq3aznq"
                }
            }
        }
    },
    "auth": {
        "plugins": {
            "awsCognitoAuthPlugin": {
                "UserAgent": "aws-amplify-cli/0.1.0",
                "Version": "0.1.0",
                "IdentityManager": {
                    "Default": {}
                },
                "CredentialsProvider": {
                    "CognitoIdentity": {
                        "Default": {
                            "PoolId": "ap-southeast-2:58e576f7-8fb3-4a6d-b217-28e13c71a487",
                            "Region": "ap-southeast-2"
                        }
                    }
                },
                "CognitoUserPool": {
                    "Default": {
                        "PoolId": "ap-southeast-2_hpRwtzqvi",
                        "AppClientId": "aj081j0koejejoilnnd4kbn60",
                        "Region": "ap-southeast-2"
                    }
                },
                "Auth": {
                    "Default": {
                        "authenticationFlowType": "USER_SRP_AUTH",
                        "socialProviders": [],
                        "usernameAttributes": [
                            "EMAIL"
                        ],
                        "signupAttributes": [
                            "EMAIL"
                        ],
                        "passwordProtectionSettings": {
                            "passwordPolicyMinLength": 8,
                            "passwordPolicyCharacters": []
                        },
                        "mfaConfiguration": "OFF",
                        "mfaTypes": [
                            "SMS"
                        ],
                        "verificationMechanisms": [
                            "EMAIL"
                        ]
                    }
                },
                "AppSync": {
                    "Default": {
                        "ApiUrl": "https://liyoishus5gczbc6mtk62axfum.appsync-api.ap-southeast-2.amazonaws.com/graphql",
                        "Region": "ap-southeast-2",
                        "AuthMode": "API_KEY",
                        "ApiKey": "da2-wztxxufejfejteuwucmjq3aznq",
                        "ClientDatabasePrefix": "daycarediscover_API_KEY"
                    },
                    "daycarediscover_AMAZON_COGNITO_USER_POOLS": {
                        "ApiUrl": "https://liyoishus5gczbc6mtk62axfum.appsync-api.ap-southeast-2.amazonaws.com/graphql",
                        "Region": "ap-southeast-2",
                        "AuthMode": "AMAZON_COGNITO_USER_POOLS",
                        "ClientDatabasePrefix": "daycarediscover_AMAZON_COGNITO_USER_POOLS"
                    },
                    "daycarediscover_AWS_IAM": {
                        "ApiUrl": "https://liyoishus5gczbc6mtk62axfum.appsync-api.ap-southeast-2.amazonaws.com/graphql",
                        "Region": "ap-southeast-2",
                        "AuthMode": "AWS_IAM",
                        "ClientDatabasePrefix": "daycarediscover_AWS_IAM"
                    }
                }
            }
        }
    }
}''';
