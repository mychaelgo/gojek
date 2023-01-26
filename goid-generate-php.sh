# https://docs.github.com/en/packages/quickstart

docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate -i /local/docs/goid-gojekapi.yaml -g php --additional-properties=invokerPackage=GoIdGojekPhp,packageName=GoIdGojekPhp -o /local/sdk/goid-gojek-php
