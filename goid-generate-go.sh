docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate -i /local/docs/goid-gojekapi.yaml -g go --additional-properties=packageName=goid-gojek -o /local/sdk/goid-gojek-go
