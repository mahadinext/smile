# #!/bin/bash

# # Navigate to the Laravel application directory
# cd ~/home/smileaca/evaluation.smileacad.com

# # Run database migrations
# php artisan migrate --force

# # Clear caches
# php artisan cache:clear

# # Clear and cache routes
# php artisan route:cache

# # Clear and cache config
# php artisan config:cache

# # Clear and cache views
# php artisan view:cache

#!/bin/bash

# Exit immediately if a command exits with a non-zero status
set -e

# FTP server details
FTP_SERVER=$1
FTP_USERNAME=$2
FTP_PASSWORD=$3
LOCAL_DIR=$4
REMOTE_DIR=$5

# Print debug information
echo "FTP_HOST: $FTP_SERVER"
echo "FTP_USERNAME: $FTP_USERNAME"
echo "LOCAL_DIR: $LOCAL_DIR"
echo "REMOTE_DIR: $REMOTE_DIR"

# Use lftp to mirror the local directory to the remote directory, skipping SSL verification
lftp -d -c "
set ssl:verify-certificate no;
open -u $FTP_USERNAME,$FTP_PASSWORD $FTP_SERVER;
mirror -R --verbose --only-newer --parallel=10 $LOCAL_DIR $REMOTE_DIR;
bye;
"
