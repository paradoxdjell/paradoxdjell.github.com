---
layout: post
title: Net Neutrality Walkathon
user: Aditya Saky
image: http://saky.in/images/net-neutrality-walkathon.jpg
excerpt: I posted a while ago about why net neutrality is important, especially in a country like India.
galleryid: airtel-zero-walkaton
---

I [posted a while ago](http://saky.in/Net-Neutrality-in-India/) about why net neutrality is important, especially in a country like India.

![Net Neutrality Walkathon](http://saky.in/images/net-neutrality-walkathon.jpg "Taken from FSMK and I'm pretty sure they don't mind ;)")

[Free Software Movement Karnataka](http://fsmk.org/) organised a walkathon in Koramangala yesterday to protest and to spread awareness about the importance of net neutrality. Even with the heavy rainfall, the walkathon went well and we distributed quite a few of the handouts prepared.

I've embedded the images below!

{% include net-neutrality-walkathon-images.html %}

Also, today is the last day to appeal TRAI to protect out internet. Hit up [savetheinternet.in](http://savetheinternet.in/) if you haven't already.

*Edit: TRAI is no longer accepting responses from users. They've now asked telecom companies to present their side. Stay tuned.*

{% for image in site.static_files %}
    {% if image.path contains 'images/airtel-zero-walkathon' %}
        <img src="{{ site.baseurl }}{{ image.path }}">
    {% endif %}
{% endfor %}
