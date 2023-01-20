# https://docs.github.com/en/packages/quickstart

docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate -i /local/docs/gopay-gojekapi.yaml -g typescript-axios --additional-properties=npmRepository=https://npm.pkg.github.com,stringEnums=true,modelPropertyNaming=original,npmName=@mychaelgo/gopay-gojek,useSingleRequestParameter=true -o /local/sdk/gopay-gojek-node
cp .npmrc.example sdk/gopay-gojek-node/.npmrc
cd sdk/gopay-gojek-node
sedRepoString=", \"repository\": { \"type\": \"git\", \"url\": \"git+https:\/\/github.com\/mychaelgo\/gojek.git\" }"
sed -i -e "$(( $( wc -l < package.json) -1 ))s/$/\n$sedRepoString/" package.json
rm package.json-e
npm i
npm run build
