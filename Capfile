# Load DSL and set up stages
require 'capistrano/setup'

# Include default deployment tasks
require 'capistrano/deploy'
require 'capistrano/composer'
require 'capistrano/symfony'


Dir.glob('config/tasks/*.rake').each { |r| import r }