external_url 'https://gitlab.nasri.local/'
gitlab_rails['initial_root_password'] = File.read('/run/secrets/gitlab_root_password')
# For GitLab
nginx['ssl_certificate'] = "/run/secrets/ssl_certificate"
nginx['ssl_certificate_key'] = "/run/secrets/ssl_certificate_key"