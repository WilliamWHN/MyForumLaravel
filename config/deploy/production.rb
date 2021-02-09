server '94.103.96.173', user: 'cld2_12', roles: %w{web app laravel composer}
set :ssh_options, {
    keys: %w(c:/Users/William/.ssh/id_rsa),
    forward_agent: false,
    auth_methods: %w(publickey)
  }
