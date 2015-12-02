# SimplyRETS API Examples

A collection of examples showcasing usage of the SimplyRETS API.

## Getting Started

All examples are self-contained

From the command line:

    $ chromium ./interactive-map-search/index.html`

If you want to serve an example, you can use

For example, to serve the `interactive-map-search` example, you can:

    $ ruby -run -ehttpd interactive-map-search/ -p8000

/The example above requires Ruby 1.9.2+/

Then, simply type `localhost:8000` in your browser.

## Interactive Map Search

The directory `interactive-map-search` uses Leaflet, OpenStreetMap,
and jQuery to allow interactively searching a map. The test data is
located in Houston.
