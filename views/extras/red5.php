<html><head>
<title>
	CometChat Red5
</title>
</head><body><pre style="word-wrap: break-word; white-space: pre-wrap;"># Author: CometChat 
# /etc/init.d/red5
#
# Check for missing file
RED5_DIR=/usr/local/ccred5
test -x $RED5_DIR/red5.sh || exit 5

case "$1" in
    start)
        echo -n "Starting Red5 Service for CometChat Plugins"
        echo -n " "
        cd $RED5_DIR
        su -s /bin/bash -c "$RED5_DIR/red5.sh &amp;" root 
        sleep 2
        ;;
    stop)
        echo -n "Shutting down red5 for CometChat Plugins"
        echo -n " "
	cd $RED5_DIR
        su -s /bin/bash -c "$RED5_DIR/red5-shutdown.sh &amp;" root
        sleep 2
        ;;
    restart)
        echo -n "Restarting Red5 Service for CometChat Plugins"
        $0 stop
        $0 start
        ;;
esac</pre></body></html>