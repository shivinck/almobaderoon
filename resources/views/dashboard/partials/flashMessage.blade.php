@if ($message = Session::get('error'))
<script>
    $(document).toast({ type: 'error', icon: 'mdi-close-circle-outline', title: 'Application Error', msg: '{{ $message  }}' })
</script>
@endif

@if ($message = Session::get('success'))
<script>
     $(document).toast({ type: 'success', icon: 'mdi-close-circle-outline', title: 'Application Success', msg: '{{ $message  }}' })
</script>
@endif
