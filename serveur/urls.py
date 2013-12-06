from django.conf.urls import patterns, url

from serveur import views

urlpatterns = patterns('',
    url(r'^$', views.index, name='index'),
    url(r'^(?P<id>\d+)/search/$', views.search, name='search'),
    url(r'^user_crea/$', views.user_crea, name='user_crea'),
    url(r'^inscription/$', views.inscription, name='inscription'),
    url(r'^login/$', views.login, name='login'),
    url(r'^logingin/$', views.logingin, name='logingin'),
    url(r'^(?P<id>\d+)/search/$', views.search, name='search'),
)
