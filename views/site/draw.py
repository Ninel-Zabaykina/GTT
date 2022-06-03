# import the pyplot and wavfile modules
# https://pythontic.com/visualization/signals/spectrogram
import sys
import matplotlib.pyplot as plot
from scipy.io import wavfile

# Read the wav file (mono)
samplingFrequency, signalData = wavfile.read(sys.argv[1])

# Plot the signal read from wav file
plot.title('Spectrogram of a wav file with guitar music')
plot.plot(signalData)
plot.xlabel('Sample')
plot.ylabel('Amplitude')
# plot.show()

plot.savefig('C:/xampp/htdocs/GTT/views/site/s.png')
