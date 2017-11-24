const getBearerToken = require('get-twitter-bearer-token')

const twitter_consumer_key = 'WYgmYlaIqEryGDt8jXDrIlp3Q'
const twitter_consumer_secret = '5fWPChnvaAcUtg1QVyLMb3yXOEnvjegFtviLBQk0kwmHQZoYaS'

getBearerToken(twitter_consumer_key, twitter_consumer_secret, (err, res) => {
    if (err) {
        // handle error
    } else {

        // bearer token
        console.log(res.body.access_token)
}
})