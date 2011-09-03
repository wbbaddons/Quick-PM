#!/bin/sh
cd files
tar -cf ../files.tar *
cd ../templates
tar -cf ../templates.tar *
cd ..
tar -czf de.wbbaddons.wcf.quick-pm.tar.gz *.xml *.tar
rm templates.tar files.tar
echo "Build finished"
