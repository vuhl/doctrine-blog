guard 'phpunit', :tests_path => 'test', :cli => '-c phpunit.xml --colors' do
  # Watch tests files
  watch(%r{^.+Test\.php$})

  # Watch library files and run their tests
  # watch(%r{^module/(.+)/src/.+/(.+)/(.+)\.php}) { |m| "test/#{m[1]}/#{m[2]}/#{m[3]}Test.php" }
  watch(%r{^src\/(.+)\/(.+)\.php}) { |m| "test/#{m[1]}/#{m[2]}Test.php" }
end