docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate -i /local/docs/goid-gojekapi.yaml -g go --additional-properties=packageName=goid_gojek_go -o /local/sdk/goid-gojek-go --git-user-id mychaelgo --git-repo-id gojek/sdk/goid-gojek-go
cd sdk/goid-gojek-go
go get -d -v .
go build -v ./
